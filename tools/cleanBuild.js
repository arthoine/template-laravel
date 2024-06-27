/* eslint-disable no-console, import/no-extraneous-dependencies */
// This script cleans the './public' folder before the build
const shell = require('shelljs');

const { chalkSuccess, chalkProcessing } = require('./chalkConfig');

process.stdin.setEncoding('utf8');

console.log(chalkProcessing('Old build files cleanup started...'));

// Cleanup our files
shell.rm('-rf', 'public/build/assets/*');
shell.rm('-rf', 'public/build/images/*');

console.log(chalkSuccess('Old build files removed. Keep going...'));
