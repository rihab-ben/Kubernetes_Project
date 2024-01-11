pipeline {
  agent { label 'linux' }
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
  }
  environment {
    DOCKERHUB_CREDENTIALS = credentials('mydock-hub')
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t imaneaabouche/myapp:v1 .'
      }
    }
    stage('Login') {
      steps {
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
      }
    }
    stage('Push') {
      steps {
        sh 'docker push imaneaabouche/myapp:v1'
      }
    }
  }
  post {
    always {
      sh 'docker logout'
    }
  }
}
