<div id="top"></div>

[![Contributors][contributors-shield]][contributors-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]


<br />
<div align="center">
    <a href="https://github.com/sezaicetin/img-create">
        <img src="images/logo.png" alt="Logo" width="200" height="54">
    </a>
    <h3 align="center">IMG-CREATE</h3>
    <p align="center">
        Easy image creation and optimization with php.
        <br />
        <a href="https://github.yazilimi.org/img-create/demo/">View Demo</a>
        ·
        <a href="https://3xcode.com/tr/iletisim">Report Bug</a>
    </p>
</div>

<details>
    <summary>Table of Contents</summary>
    <ol>
      <li>
        <a href="#about-the-project">About The Library</a>
      </li>
      <li>
        <a href="#getting-started">Getting Started</a>
        <ul>
          <li><a href="#installation">Installation</a></li>
        </ul>
      </li>
      <li><a href="#usage">Usage</a></li>
      <li><a href="#license">License</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#acknowledgments">Acknowledgments</a></li>
    </ol>
</details>


## About The Library
<div align="center">
  [![Product Name Screen Shot][product-screenshot]](https://github.yazilimi.org/img-create/)
</div>

Thanks to the GD library, we can re-create and send image files (png, jpg, etc.) in an html page in the dimensions we need before sending them to the browser.

What are the advantages of this for us?

* Reducing bandwidth costs
* Performance/Speed

It is a great waste to view image files that are uploaded at high levels, especially by unconscious or lazy users, without rescaling.

Of course, there are also disadvantages of this, but when the benefit / cost evaluation is made, it will be more accurate and logical to use it. I can recommend ;)

<p align="right">(<a href="#top">back to top</a>)</p>



## Getting Started

What we need: composer, php, gd



### Installation

  * Composer
    ```sh
    composer require sezaicetin/img-create
    ```

<p align="right">(<a href="#top">back to top</a>)</p>



## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

  * Example 1
    ```php
    $img =  new sezaicetin\Create\img();
    $img->create(300, 300, '/img/test.png');
    ```
  * Example 2
    ```php
    $img =  new sezaicetin\Create\img('Company Name');
    $img->create(500, 500, '/img/notfound');
    ```

<p align="right">(<a href="#top">back to top</a>)</p>



## License

Distributed under the MIT License. See `LICENSE` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



## Contact

Sezai ÇETİN - [@sezaicetin](https://www.linkedin.com/in/sezaicetin) - sezai@3xcode.com

Library Link: [https://github.com/sezaicetin/img-create](https://github.com/sezaicetin/img-create)

<p align="right">(<a href="#top">back to top</a>)</p>



## Acknowledgments

* [PHP](https://www.php.net/)
* [GitHub](https://www.github.com/)
* [Packagist.org](https://www.packagist.org/)

<p align="right">(<a href="#top">back to top</a>)</p>

[contributors-shield]: https://img.shields.io/static/v1?label=Demo&message=Link&color=green
[contributors-url]: https://github.yazilimi.org/img-create/demo/
[license-shield]: https://img.shields.io/static/v1?label=License&message=MIT&color=red
[license-url]: https://github.com/sezaicetin/img-create/blob/master/LICENSE
[linkedin-shield]: https://img.shields.io/static/v1?label=Linked&message=in&color=blue
[linkedin-url]: https://www.linkedin.com/in/sezaicetin
[product-screenshot]: images/screenshot.png
