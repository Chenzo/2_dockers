A Tale Of Two Dockers
====================  
2 dockers talking.


Two Docker Containers tied together via a network bridge. Then the hostname of the second container passed via an environment variable. 

As simple and unencumbered as I can make it.


From the root run this command:
`docker-compose -f docker/docker-compose_one.yml up --build`

From another terminal run this command:
`docker-compose -f docker/docker-compose_two.yml up --build`


ONE will be running at 
http://localhost/



TWO will be running at 
http://localhost:8088/




