build:
	docker build -t sminnee/selenium-xvfb .

push: build
	docker push sminnee/selenium-xvfb
