pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS = credentials('Imane-dock')
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t imaneaabouche/app-m2ssi:v1 .'
      }
    }
    stage('Login') {
      steps {
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
      }
    }
    stage('Push') {
      steps {
        sh 'docker push imaneaabouche/app-m2ssi:v1'
      }
    }
  }
  post {
    always {
      sh 'docker logout'
    }
  }
}
