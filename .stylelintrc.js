module.exports = {
  plugins: ['stylelint-declaration-strict-value'],
  rules: {
    'at-rule-empty-line-before': [
      'always',
      {
        ignore: ['after-comment', 'blockless-after-blockless', 'inside-block'],
        except: ['first-nested'],
      },
    ],
    'at-rule-no-unknown': [
      true,
      {
        ignoreAtRules: ['tailwind', 'screen', 'mixin', 'include'],
      },
    ],
    'block-no-empty': true,
    'color-hex-length': 'short',
    'color-named': 'never',
    'comment-empty-line-before': ['always', { except: ['first-nested'] }],
    'comment-no-empty': true,
    'declaration-block-single-line-max-declarations': 1,
    'declaration-property-value-disallowed-list': {
      border: ['none'],
      'border-right': ['none'],
      'border-bottom': ['none'],
      'border-left': ['none'],
    },
    'length-zero-no-unit': true,
    'max-nesting-depth': 10,
    'rule-empty-line-before': ['always', { ignore: ['after-comment'] }],
    'scale-unlimited/declaration-strict-value': [
      ['/color$/', 'font-family'],
      {
        ignoreValues: [
          'currentColor',
          'transparent',
          'inherit',
        ],
      },
    ],
    'selector-class-pattern': [
      '^(?!js-).*',
      { message: 'should not be written in the form js-*' },
    ],
    'selector-max-id': 0,
    'selector-type-case': 'lower',
  },
};
