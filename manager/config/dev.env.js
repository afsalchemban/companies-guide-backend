'use strict'
const merge = require('webpack-merge')
const prodEnv = require('./prod.env')
module.exports = merge(prodEnv, {
 NODE_ENV: '"development"',
 BASE_URL: '"https://businessid.net/api/v2/"',
 /// BASE_URL: '"https://api-dev.uaect.com/"',
  //Sandbox-client ID
  PAYPAL_CLIENT_ID: '"AY8g5lCWRgoVvjtZje6GoaL2AvxWbHhcX2LH2XLYF5YFpezoe5P7m33_Az58FIlJbCM3GkTzs-msoHuQ"'

})