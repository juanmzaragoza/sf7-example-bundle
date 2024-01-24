# Symfony 7 project
This is a symfony example project

## Development environment
Start to develop quickly
```
cd my-project/
symfony server:start
```

## Installation
Add the next code to the `config/routes.yaml` file:
```
controllers_bundle:
    resource:
        path: ../src/ExpertSoul/ExampleBundle/src/Controller
        namespace: App\ExpertSoul\ExampleBundle\Controller
    type: attribute
```