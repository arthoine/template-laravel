module.exports = {
  parser: '@babel/eslint-parser',
  extends: [
    'airbnb-base',
    'plugin:import/recommended',
  ],
  env: {
    browser: true,
    es2022: true,
    node: true,
  },
  parserOptions: {
    ecmaFeatures: {
      jsx: true,
    },
    sourceType: 'module',
  },
  ignorePatterns: [
    'vendor',
    'packages-lock.json',
    'yarn.lock',
  ],
  rules: {
    'class-methods-use-this': 0,
    'import/prefer-default-export': 0,
    'object-curly-newline': 0,
    'no-console': [1, { allow: ['warn', 'error'] }],
    'no-new': 0,
    'no-param-reassign': ['error', {
      props: false,
    }],
  },
  settings: {
    'import/resolver': {
      node: { extensions: ['.js', '.cjs'] },
    },
  },
};
