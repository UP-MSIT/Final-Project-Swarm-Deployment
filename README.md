# Jenkins-Deployment-Config

[***Note: Jenkins support java version 8***](https://get.jenkins.io/war-stable/)

### Installation

**Download Java jdk-8 and Installation steps:**

1.  **Install software source manager**
    
    ```java
    apt-get update
    apt-get install software-properties-common
    
    ```
    
2.  **Add mirror with openjdk-8-jdk**
    
    ```java
    apt-add-repository 'deb http://security.debian.org/debian-security stretch/updates main'
    apt-get update
    
    ```
    
3.  **Install openjdk 8**
    
    ```java
    apt-get install openjdk-8-jdk
    ```
4. **Check java version**
    ``` 
    java -version
    ```    
**1. Install Docker**
```
sudo apt-get update
sudo apt-get install \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
```
**2. Add Docker’s official GPG key**
```
sudo mkdir -p /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/debian/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
```
**3. Use the following command to set up the repository:**
```
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/debian \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
```

**4. Install Docker Engine**
```
sudo apt-get update
sudo chmod a+r /etc/apt/keyrings/docker.gpg
sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose-plugin
```
**5. Use the following command to check docker is installed**
```
docker ps 
```
   
[Download Jenkins](https://get.jenkins.io/war-stable/2.346.1/) **Version 2.346.1**

[Download Wildfly](https://download.jboss.org/wildfly/18.0.0.Final/wildfly-18.0.0.Final.tar.gz) **Version 18**

**Download Wildfly**

```
root@jenkins:~# cd /opt
root@jenkins:/opt# wget https://download.jboss.org/wildfly/18.0.0.Final/wildfly-18.0.0.Final.tar.gz
root@jenkins:/opt# tar -xzf wildfly-18.0.0.Final.tar.gz
root@jenkins:/opt# mv wildfly-18.0.0.Final wildfly-18.0.0.Final

```

**Config public access**

1. jboss.bind.address:127.0.0.1 -> 0.0.0.0
2. jboss.bind.address:127.0.0.1 -> 0.0.0.0
3. jboss.bind.address:127.0.0.1 -> 0.0.0.0

```
root@jenkins:~# cd /opt/wildfly-18.0.0.Final/standalone/configuration# vim standalone.xml 
```
<img width="1474" alt="Screenshot 2023-01-28 at 4 55 31 pm" src="https://user-images.githubusercontent.com/34917417/215259982-86236a20-a1ec-4776-8c17-748334a17e50.png">

**Go to**

```
root@jenkins:~# cd /opt/wildfly-18.0.0.Final/standalone/deployments
root@jenkins:/opt/wildfly-18.0.0.Final/standalone/deployments# wget https://get.jenkins.io/war-stable/2.346.1/
root@jenkins:/opt/wildfly-18.0.0.Final/standalone/deployments# ls -l
root@jenkins:/opt/wildfly-18.0.0.Final/standalone/deployments# cd

```
<img width="636" alt="Screenshot 2023-01-28 at 5 02 02 pm" src="https://user-images.githubusercontent.com/34917417/215260266-be1c7bde-a561-4b38-9747-9a8cc3011e65.png">

**Run shell script to deploy Jenkins server**

```
root@jenkins:~# cd /opt/wildfly-18.0.0.Final/bin/ 
root@jenkins:/opt/wildfly-18.0.0.Final/bin# ./standalone.sh 
```
![Screenshot 2023-01-28 at 5 03 43 pm](https://user-images.githubusercontent.com/34917417/215260328-288f7de1-2478-4911-9c16-45ac6185a26e.png)
<img width="1680" alt="Screenshot 2023-01-28 at 5 03 43 pm (2)" src="https://user-images.githubusercontent.com/34917417/215260333-abca7925-ee4d-4b1d-80ed-7ee93d8a4163.png">

