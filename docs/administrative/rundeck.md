# Rundeck

http://192.168.10.2:4440

## Member Servers

Rundeck currently runs on orchestrator (localhost) because it's used for running ansible playbooks. Orchestrator is the master VM and has access to every other VM by private key.

## Jobs

All jobs are backed up in github at https://github.com/brasky/FITS-CTF-JOBS. Whenever changes are made you should click on the job options and click commit changes.

There are 2 jobs for each environment (dev and prod are in the CTF project, submissions are in a separate project), they are (names might not matche exactly):

- Clone and pull Dev
    - clones dev to /home/rundeck/FITS-CTF-DEV
- Clone and pull master
    - clones master to /home/rundeck/FITS-CTF
- Deploy Dev
    - runs the dev ansible playbook
- Deploy master
    - runs the master ansible playbook

Then there are jobs that just run both jobs. i.e. there is a dev clone and deploy job that runs clone, then runs deploy. 

## Jenkins Integration

Although rundeck and ansible are where the real work happens, [jenkins](jenkins.md) is what kicks off the jobs. It is polling [github](github.md) using smee and is set to kick off the relevant job on commit.

## Secret Store
