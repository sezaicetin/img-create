<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]


<br />
<div align="center">
    <a href="https://github.com/othneildrew/Best-README-Template">
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

[![Product Name Screen Shot][product-screenshot]](https://github.yazilimi.org/img-create/)

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

  * Composer
    ```php
    $img =  new sezaicetin\Create\img();
    $img->create(300, 300, '/img/test.png');

<p align="right">(<a href="#top">back to top</a>)</p>



## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



## Contact

Sezai ÇETİN - [@your_linkedin](https://www.linkedin.com/in/sezaicetin) - sezai@3xcode.com

Library Link: [https://github.com/sezaicetin/img-create](https://github.com/sezaicetin/img-create)

<p align="right">(<a href="#top">back to top</a>)</p>



## Acknowledgments

* [PHP](https://www.php.net/)
* [GitHub](https://www.github.com/)
* [Packagist.org](https://www.packagist.org/)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
