node{
      //def dockerImageName= 'certification_udr_$JOB_NAME'
      
      stage('SCM Checkout'){
         git 'https://github.com/KnackCloud/certificate-upload.git'
      }
      stage('Build'){
         // Get maven home path and build
         def mvnHome =  tool name: 'Maven 3.5.4', type: 'maven' 
         sh "${mvnHome}/bin/mvn -Dmaven.test.failure.ignore=true clean package"

      }      
      /*stage('Build Docker Image'){         
           sh "docker build -t ${dockerImageName} ."
      }  
   
      stage('Publish Docker Image'){
         withCredentials([string(credentialsId: 'dockerpwdkc', variable: 'dockerPWD')]) {
               sh "docker login -u knackc123 -p ${dockerPWD}"
         }
        sh "docker tag ${dockerImageName} knackc123/${dockerImageName}"
        sh "docker push knackc123/${dockerImageName}"
      }
      
    stage('Run Docker Image'){
          def dockerContainerName = 'javadedockerapp_$JOB_NAME_$BUILD_NUMBER'
          def removeOldService = "sudo docker service rm udr"          
          def dockerRun= "sudo docker service create --name udr --publish 80:80 knackc123/${dockerImageName}" 
          
            withCredentials([string(credentialsId: 'deploymentserverpwd', variable: 'dpPWD')]) {  
                  sh "sshpass -p ${dpPWD} ssh -o StrictHostKeyChecking=no root@3.85.103.194 ${removeOldService}"
                  sh "sshpass -p ${dpPWD} ssh -o StrictHostKeyChecking=no root@3.85.103.194 ${dockerRun}"
            }
    }
      stage('Performance Test'){
            sh "sudo su"
            sh "cd /home/ec2-user/jmeter/apache-jmeter-5.4.1/bin"
            sh "sh /home/ec2-user/jmeter/apache-jmeter-5.4.1/bin/jmeter.sh -n -t /home/ec2-user/jmeter/apache-jmeter-5.4.1/bin/demo1udr.jmx -l /home/ec2-user/jmeter/apache-jmeter-5.4.1/bin/report.jtl"
           
      }
            
      
      
      
      */stage('Code Analysis'){
             withSonarQubeEnv('SonarQube') {
             def mvnHome =  tool name: 'Maven 3.5.4', type: 'maven' 
             sh "${mvnHome}/bin/mvn clean verify sonar:sonar"
             }
        } 
       
      
         
  }
      
