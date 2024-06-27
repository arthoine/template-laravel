<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'locale' => 'fr',
            'template' => 'standard',
            'publication_date' => now(),
            'seo_title' => $title,
            'seo_description' => $this->faker->sentence(),
            'seo_robots' => 1,
            'extras' => [
                'vc_content' => [
                    [
                        'type' => 'block-wysiwyg',
                        'content' => [
                            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed suscipit diam, sed consectetur ante. Phasellus pellentesque placerat augue rutrum placerat. Aliquam sit amet mi orci. Cras sed pretium lectus. Suspendisse viverra velit odio. Mauris justo est, faucibus vitae tincidunt vitae, interdum quis nisi. Phasellus egestas feugiat finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum vestibulum lectus a turpis pharetra, in lobortis velit pharetra. Morbi ut mauris leo. Etiam sed dui eget mi interdum pulvinar ut eu orci. Donec mattis dolor malesuada risus cursus molestie. Aliquam non congue erat, ac auctor justo.</p><p><br></p><p>Etiam eu quam ornare, consectetur ipsum quis, bibendum neque. Proin in tincidunt orci. Aenean sed leo laoreet, euismod quam et, viverra urna. Nam volutpat purus non enim iaculis, nec ultricies libero tempus. Sed urna orci, rutrum non tempor ut, vestibulum quis sapien. Aliquam leo augue, sodales a posuere id, suscipit nec velit. Sed et turpis eros. Suspendisse tempus, leo a sodales laoreet, nulla purus posuere urna, sit amet tempor tellus sem id nisi. Sed vitae congue risus. Aliquam erat volutpat. Proin mattis, mauris sed ullamcorper sagittis, felis lectus lobortis mi, pellentesque aliquet dui lectus eu dolor. Aenean vulputate leo a nunc fermentum faucibus. Fusce mollis mollis lectus, sit amet suscipit felis efficitur quis.</p>',
                        ],
                    ],
                ],
            ],
        ];
    }
}
