# My smart-home server

REST API for collecting data from some sensors, installed with NodeMCU (ESP8266) device.

# What is this?

I have faced the necessity to check temperature\humidity in my house remotely. After digging around a bit I
have decided to build my own solution based on [NodeMCU](https://en.wikipedia.org/wiki/NodeMCU) platform. As long as it contains an [ESP8266](https://en.wikipedia.org/wiki/ESP8266) module
I will be able to check data from my sensors remotely. I have chosen to implement client-side solution on
that platform. So this is the **server-side** part, implemented on [SLIM php framework](https://www.slimframework.com/).
In other words, *this* part should be deployed on some server. NodeMCU is a *client*, configurable to execute HTTP requests to this server in order to pass current sensor values. Probably by timer, not sure yet.
Such an architecture provides persisting the data across some timeline. That's all.

# Development

Clone this repo and run `composer install` to install all dependencies.
For local debug run `composer start` command then open `http://localhost:8888/` location with your browser.
To execute all tests run `./tests/run.sh`
To execute unit tests only run `./tests/unit/run.sh`
To execute integration tests only run `./tests/integration/run.sh`, obviously.
