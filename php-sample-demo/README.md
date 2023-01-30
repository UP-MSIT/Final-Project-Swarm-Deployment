
# PHP Docker Demo App
This is a PHP demo application. 

https://hub.docker.com/r/webdevops/php-nginx/tags
https://hub.docker.com/r/sithvothykiv/docker-php-helloworld
#

## Get Started 🚀  
To get started, Run docker command 

   
## Usage  
~~~javascript  
docker pull sithvothykiv/docker-php-helloworld

docker build -t sithvothykiv/docker-php-helloworld .

docker run -t -p 8000:80 sithvothykiv/docker-php-helloworld

~~~  
  
## Authors  
- [@sithvothykiv](https://www.github.com/sithvothykiv)  
 
 
## Todo Features  
- Create dockerfile
- Build Docker image
- Push to dockerhub
- Showing run instruction on dockerhub
 
## Run Locally  
Clone the project  

~~~bash  
  git clone https://link-to-project
~~~

Go to the project directory  

~~~bash  
  cd my_app
~~~

Pull Repository from DockerHub  

~~~bash  
docker build -t my_app .

docker image ls

docker run -p 8000:8000 -d <imageID>

