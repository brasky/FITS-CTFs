# Jenkins

http://192.168.10.3:8080

## Webhooks

Jenkins subscribes to github via smee so that it does not have to be open to the internet. See the [Github](github.md#Webhook) article for more details.

## Rundeck

The rundeck plugin for jenkins allows it to run rundeck jobs as post-build actions. As of 10/9/19 the only jenkins project is one called `CTF`. This project listens to commits to the `dev` branch using a github webhook and kicks off a rundeck job to clone and deploy (job ID 5a682d0c-77d2-4787-978f-dfcecf7c7bee which is configured in the jenkins build task). See the [Rundeck](rundeck.md) article for more details.