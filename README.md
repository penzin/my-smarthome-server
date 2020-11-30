# My smart-home server

REST API for collecting data from sensors, installed on NodeMCU (ESP8266) device.

# What is this?

I have faced the necessity to check temperature\humidity in my house remotely. After small digging around
have decided to build my own solution based on `NodeMCU` platform. As long as it contains an `ESP8266` module
I will be able to check data from my sensors remotely. I have chosen to implement client-side solution on
that platform. So this is the server-side part, implementing on `SLIM php framework`.

# Development

For local debug run `composer start` command then open `http://localhost:8888/` location with your browser.
To execute all tests run `./tests/run.sh`
To execute unit tests only run `./tests/unit/run.sh`
To execute integration tests only run `./tests/integration/run.sh`, obviously.
