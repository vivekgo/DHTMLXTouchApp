.. DhtmlxTouch documentation master file, created by
   sphinx-quickstart on Mon May  6 09:43:56 2013.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

Welcome to DHTMLX Touch's documentation!
==========================================

.. toctree::
   :maxdepth: 2

.. _DHTMLX Touch: http://dhtmlx.com/touch/

`DHTMLX Touch`_ is a javascript framework for creating HTML5-based mobile web applications. This framework provides a wide variety of UI components ranging from lists, forms to calendars and video. Event Handling of click/keyboard events as well as touch events is supported. Data Storage on client side(offline storage) is one of the features which make DHTMLX Touch more attractive.

=====================================================
DHTMLX Touch Installation Guide
=====================================================

This installation guide will help you setup environment to code using DHTMLX Touch provided libraries. This part of the guide is organised in three sections. In first section contains links for downloading DHTMLX Touch libraries, how to inlcude these libraries into your code and related documentation. Second section, details about the use of DHTMLX Touch Visual Designer Tool which is available online. The last section, explains the tools you would need to test your mobile web applications.

=====================================================
Downloading and Importing DHTMLX Touch
=====================================================

+ Download DHMTMLX Touch Libraries
    In order to use libraries provided by DHTMLX Touch framework, you need to download them on system and reference them as and when required. In the next section, we discuss about how to import these libraries in your project.
    
    .. _Download DHTMLX Touch: http://dhtmlx.com/x/download/regular/dhtmlxTouch.zip

    Link for downloading DHTMLX Touch library: `Download DHTMLX Touch`_
    

    After downloading the zip file, decompress the file contents into a folder with the same name "dhtmlxTouch_v12_120913". The contents of this folder would be arranged as follows:
        - codebase (sub-directory)
        - connectors (sub-directory)
        - docs (sub-directory)
        - ide (sub-directory)

+ Importing
    After downloading DHTMLX Touch libraries, importing them into your applications is pretty straightforward. In order to use DHTMLX Touch basic functionalities, two files are required to be included in your code. These files are:
        - touchui.css (present in *codebase* subdirectory listed above)
        - touchui.js (present in *codebase* subdirectory listed above)

    The following code block clearly illustrates the way of including above files using relative path.
    
    .. image:: _static/sample3.png
    
    For server side integration, libraries for data connectors are present in *codebase* subdirectory listed above. DHTMLX Touch supports data connectors for PHP, Java and Cold Fusion.

+ Documentation
    .. _DHTMLX Touch Documentation: http://docs.dhtmlx.com/touch/doku.php
    
    DHTMLX Touch's documentation is well organized and maintained and is of great help while developing applications using this framework. Access `DHTMLX Touch Documentation`_ here.



=====================================================
Development and Testing Tools
=====================================================
.. _DHTMLX Touch Visual Designer Tool: http://www.dhtmlx.com/touch/designer/

Developing mobile web applications require minimal effort as far as development and testing tools are concerned. You can use any code editor or IDE to write code. However, preferable setting would to be use an IDE which supports Javascript based development. Testing of mobile web applications developed using DHTMLX Touch can be done using WebKit browsers (Safari, Chrome, etc.) and Firefox 3.6+, Opera, IE8+ or in case you have troubles with the visual elements, use of Android emulator(or real device)'s browser is preferred.
    
    + Design Tools
        Developing user interface using DHTMLX Touch can be easily done using an online designer tool, `DHTMLX Touch Visual Designer Tool`_ . Details about this tool can be found in next section.
    + Code Editors
        Any code editor or IDE. Preferred : IDE supporting JS based development.
        OR
        Standalone Apatana IDE for JS based development.
        OR
        Eclipse IDE with Aptana Plugin.
    
    + Testing Tools
        - On Desktop PC - WebKit Browsers(Safari, Chrome), Firefox 3.6+, Opera or IE8+
        - Mobile Device - Android Emulator's Native Browser or Android Device Native Browser

=====================================================
Using DHTMLX Touch Visual Designer Tool
=====================================================
`DHTMLX Touch Visual Designer Tool`_ is an online designer tool for developing UI interface for mobile web applications developed using `DHTMLX Touch`_ . This tool offers a drag-n-drop interface for designing UI of an application. Once you are done building the UI interface of an application, click on "Get Config" button on right hand side top corner to get the associated code.

Code obtained by "get config" option has be to be placed with dhx.ui { } component within the script.

