# snooptest

I did php coding and used joomla framework for your questions

math.php is a Controller file

view.html.php is view handling file

default.php is view file

(https://www.developer.aero/WaitTime-API/Try-it-Now for YYC is a free one) 
this api need key for yyc also. Please check this link (https://www.screencast.com/t/S241svZq)


A. All code should be publicly accessible via github url (or similar public git repo).
YES

B. The Rest Service should be deployed to a publicly accessible server on the internet (preferably AWS). Please provide reasons why AWS was not used. If the service is not deployed remotely please provide instructions on how to run it locally. The service should be runnable outside an IDE.

Answer: Rest Service is accessible server on the internet and it deployed on my own domain hosting.

C. A set of integration tests asserting server functionality (Postman test suites, Rest Assured tests or bash scripts preferred). 

Answer: My best way to test for coding are : I always write code step by step and testing very step for further coding. I used firefox inspect tool (network) for rest testing.

D. Documentation detailing any service design, security choices regarding api keys or credentials or implementation preferences.
Anwser:  

WaitTime API Introduction

The SITA WaitTime API is a REST based service which provides information about how long an individual will to have to wait at a particular area, such as an airport security line, or customs queue.

The response is currently calculated for the current time. That is, based on history and other data, it is determined that at this immediate moment, the wait time is x.
Registration and API Signup

To access the APIs, you will need to be issued with an API key. These values are passed in as a HTTP header (or optionally query parameter).


E. A dockerfile providing packaging as a docker container. If omitted please provide reasoning why Docker was not used.
Answer: Sorry, I don't know what you mean by dockerfile.

F. Explain how caching could be performed on the Restful service and pros/cons
Answer: According to my technical language we use caching to response same request of client without communitcate with server. 
Pros: By using caching UI response time very quick. 
Cons: UI can show latest data when caching expired.

G. All documentation and code should be provided within the README.md file in github
YES

