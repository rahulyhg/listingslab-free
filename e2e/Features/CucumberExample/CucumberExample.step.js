/* eslint-disable no-use-before-define */ // Allow functions to be hoisted

const { Given } = require(`cucumber`);
const { iAmOn } = require(`../../createWorld`);

async function iAmOnTheAppPage() {
  const url = `http://localhost:3000/`;
  await iAmOn(url);
}
exports.iAmOnTheAppPage = iAmOnTheAppPage;
Given(/^I am on the app page$/, iAmOnTheAppPage);
