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

- Clone this repo and run `composer install` to install all dependencies
- For deploy and run locally the solution via docker-compose use `composer start` command. It will up two containers and solution will be available on `http://127.0.0.1:8080/`
- To execute all tests run `composer tests`
- To execute unit tests only run `composer unit-tests`
- To execute integration tests only run `composer integration-tests`, obviously
- To jump inside container run `composer cli`
- To stop containers run `composer stop`
