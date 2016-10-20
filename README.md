# Email Spoofer

> A PHP script to send email from any Email ID without permission


## Intro

A neatly written PHP script to send emails without permission from an SMTP server. This can also be used as a general solution for sending emails via HTML forms in your project or website to avoid using plugins like PHPMailer, SwiftMailer, etc.

#### Features

* Ultra Lightweight - just a small snippet
* Two types of snippets included - Direct PHP email and HTML form based email
* No plugin (PHPMailer, SwiftMailer, etc.) is required
* Option to configure SMTP settings
* HTML validated and secure
* Debuggine options
* Demo included

#### Use cases

* HTML forms - contact us, feedback, report a bug, etc.
* Spoofed emails - send spam or prank your friends


## Documentation

#### Getting started

1. Include the PHP code (direct or form bases) in your project
2. Customize the HTML and PHP code to suit your form fields

#### Browser Compatibility

IE9+, Chrome, Firefox, Opera, Safari and everything else.

#### Known issues

* PHP mail function does not support authentication. To use PHP Mail() function provided in this script you will need to use authentication-less SMTP servers. Either setup your own SMTP server on localhost/cloud. If not, you can host this PHP code on a less secured SMTP service like 000webhost which uses localhost to send emails or configure this script to point to an open SMTP service provider.
* Emails sent from this script may be marked as spam especially if the reciever uses Gmail or any such highly secured email inbox.
* Content type header will not work on some servers


#### Bugs and feature requests

If you encounter any issues while using this plugin or have any ideas for this plugin, feel free to create an issue or feature request on GitHub. Alternatively, you can write to the creators directly.


## Creators

**Shubham Badal**

- <https://twitter.com/ShubhamBadal>
- <https://github.com/ShubhamBadal>
- <http://www.cybrhome.com/ShubhamBadal>


## License

The MIT License (MIT)

Copyright (c) 2016 Shubham Badal

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.