import app from './app.js'
import url from './url'
import name from './name.js'
import login from './login.js'

const config = Object.assign(
  app,
  url,
  name,
  login
)

export default config;
