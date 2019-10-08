# FITS CTF

## Current Port Ranges:

| Category            | Port Range |
|---------------------|------------|
| Linux               | 6000-6999  |
| Web                 | 8000-8999  |
| Binary Exploitation | 9000-9999  |

## Creating a new challenge

- Create a branch called "[difficulty][topic]#" where:
    - difficulty is beginner, intermediate, advanced 
    - Topic is linux, web, wireless, lockpicking, or any of the github labels. Make one if there isn't one!
    - and # is one above the highest challenge number in that category. Check for issues tagged `documentation` and `your topic` to find the challenge numbering list.
        - This number will determine the port number if dockerizing the challenge. 6000 + # = the exposed port

- Switch to your branch in your editor and add the following:
    - Add a directory called roles/[difficulty][topic]# - this is where all the challenge files go
    - Inside of challenge# add:
        - A folder called `docker` (if applicable)
        - A folder called `tasks`
        - A file called <span>`readme.md`</span> which will have the details of the challenge
        - A file in `tasks` called `main.yml`
        - A file in docker called `Dockerfile` (if applicable, case-sensitive)
        - a folder called `resouces` if you need things like config files and webpages copied to the challenge vm/container

### Dockerfiles

If your challenge is using docker, you will need a Dockerfile. It should contain most of what you need in the container for the challenge. Use challenge1's dockerfile as an example. 

The dockerfile will handle setup such as:

- What operating system you want the container to run
- What packages you need installed
- Removing unncessary packages
- Creating files, echoing into files (like flags), permissions of files
- Copying files from the host machine to the container (config files, webpages, databases, etc) NOTE: Please see [Ansible Variables](#ansible-variables) for details on how to refer to these files.

As things come up I will make this overview more thorough.

### Creating tasks in tasks/main.yml

The main ansible tasks.yml file has 2 roles:

#### When used with docker:
- Get the dockerfile and necessary resources from orchestrator to the CTF-Challenges VM
- Kickoff docker build to build the image
- Start the container

#### When used with a standalone VM:
TODO as this has not happened yet, but presumably ansible is now responsible for 100% of setup and you will not have a dockerfile at all.


### Ansible Variables

Because prod and dev are pulling from 2 different branches for deployment, variables are used when referring to a file location on orchestrator. For example, in challenge1's `tasks/main.yml` there's this command to copy a dockerfile:

    - name: Copy dockerfile
    copy:
        src: "{{ repo_path }}/roles/challenge1/docker/Dockerfile"
        dest: /tmp/docker-challenge1/Dockerfile
        mode: '0744'
        force: yes

The `src` field has the variable `{{repo_path}}` because depending on the machine it's being deployed to (prod vs dev) the path might be `/home/rundeck/FITS-CTF/` (for prod) or it might be `/home/rundeck/FITS-CTF-DEV/` (for dev).

These variables are defined in `group_vars` and `vars` folders in the root of the project.