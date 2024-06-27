<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Request $request, string $slug)
    {
        $locale = app()->getLocale();
        $page = Page::where('slug', $slug)->where('locale', $locale)->first();

        if (empty($page)) {
            abort(404);
        }

        /**
         * @var Page $page
         */
        if (! $page->isPublished()) {
            $token = (string) $request->get('previewToken', '');
            if ($token !== $page->preview_token) {
                abort(403);
            }
        }

        $content = $this->getHtmlContent($page);

        $visual = $page->simpleImageUrl('visual');

        return view('pages.'.$page->template, compact('page', 'visual', 'content'));
    }

    public function getHtmlContent(Page $page): string
    {
        $htmlContent = '';
        $vc = app()->get('laravel-visual-composer');

        if (! empty($page->extras)) {
            $vcBlocks = $page->extras['vc_content'];

            if (! empty($vcBlocks)) {
                foreach ($vcBlocks as $row) {
                    $slug = $row['type'] ?? '';

                    if (empty($slug)) {
                        continue;
                    }

                    $template = $vc->templateFromSlug($slug);

                    if (empty($template)) {
                        continue;
                    }

                    $template = new $template['className'];

                    $htmlContent .= $template->render($row['content'] ?? []);
                }
            }
        }

        return $htmlContent;
    }
}
