[sminnee/selenium-xvfb](https://registry.hub.docker.com/u/sminnee/selenium-xvfb/)
=========================
Docker image
------------

This is the source of a Docker image that you can use to support Selenium testing. It provides a
Selenium RC worker, running in XVFB. It will record the entire XVFB and save it as a movie file.
Alternatively it will accept VNC connections.

Usage
-----

To run an instance, you should map ports 4444 (Selenium) and 5900 (VNC) to suitable local ports.

If you are using OSX, you will need to forward your host ports to your boot2docker VM. In the 
example below, those are ports 14444 and 15900.

    docker run -dP -p 14444:4444 -p 15900:5900 sminnee/selenium-xvfb

You can then connect to VNC as localhost:15900. The password is "vnc".

To stream video:

 * Remove the "d" argument and add the "i" argument to run in the foreground
 * Call the 'stream-mkv' command. Matroska content will be streamed to STDOUT, which you can pipe into a file.
 * The resulting mkv file is a bit messy, which we recommend you clean up by transcoding to an mp4 using ffmpeg.

In other words:

    # Start the container
    docker run --name test-session -iP -p 14444:4444 -p 15900:5900 sminnee/selenium-xvfb stream-mkv | ffmpeg -format matroska -i pipe:0 -codec copy test.mp4 &

    # ... Run your tests here ...

    # Shut down and delete your container
    docker rm -f test-session

Development
-----------

To rebuild this image locally, use the Makefile included:

    git clone https://github.com/sminnee/docker-selenium-xvfb.git
    cd docker-selenium-xvfb
    make
