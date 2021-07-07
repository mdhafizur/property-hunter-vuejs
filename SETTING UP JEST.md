# Jest for Testing Vue and JS Compoments

`npm install babel-core@7.0.0-bridge.0 --save-dev`

**Installing and configuring Jest**

**Install Jest**

`npm install jest --save-dev`

Next, create a jest.config.js file in root directory and write following code

```
module.exports = {
  testRegex: 'resources/js/vue/test/.*.spec.js$'
}
```

The testRegex configuration above configures jest to fetch the tests from the resources/js/vue/test directory, and find any file that ends with .spec.js.

Let's add a test script in our package.json file:

```
// package.json

"scripts": {
    "test": "jest"
}
```

To run our example test, run npm test in your terminal, and of course we should get a passing test.

**Configuring jest for testing Vue components**

To test our vue components, let's install some dependencies that we'll need:
`
npm i --save-dev vue-jest babel-jest @vue/test-utils
`

@vue/test-utils is the vue testing library, babel-jest, for configuring jest to use babel transpiling, and vue-jest, for configuring jest to load .vue files.

Next, we'll configure jest to use the above installed plugins:



```
// jest.config.js

module.exports = {
  testRegex: 'resources/js/vue/test/.*.spec.js$',
  moduleFileExtensions: [
    'js',
    'json',
    'vue'
  ],
  'transform': {
    '^.+\\.js$': '<rootDir>/node_modules/babel-jest',
    '.*\\.(vue)$': '<rootDir>/node_modules/vue-jest'
  },
}
```

In the above configuration, we set jest to load any files that end with the .vue files using the vue-jest transformer plugin, and any files that end with .js to be loaded using the babel-jest plugin.

Finally, we need to set up a .babelrc file at the root of our project for jest, since laravel-mix does not expose its babel configuration. Create a .babelrc file, and in it, add the following configuration:



```
// .babelrc

{
  "presets": [
        "@babel/preset-env"
    ]
}
```

To test all of this, we'll write a simple test for the Example.vue component that comes with Laravel by default:



```
// resources/js/vue/test/index.spec.js

import { mount } from '@vue/test-utils';
import ExampleComponent from '../../components/ExampleComponent.vue';

test('it works', () => {
  expect(1 + 1).toBe(2);
});

test('should mount without crashing', () => {
  const wrapper = mount(ExampleComponent);

  expect(wrapper).toMatchSnapshot();
});

```

Running our test now should give you a successful result.

**To run test**
```
npm run test
```
**For more information**

https://vuejs.org/v2/guide/testing.html
https://jestjs.io/docs/getting-started
https://vueschool.io/lessons/installing-vue-test-utils
