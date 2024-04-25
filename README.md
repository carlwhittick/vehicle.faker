<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>

<!-- PROJECT SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<br />
<div align="center">
  <a href="https://github.com/carlwhittick/vehicle.faker">
    <img src="images/logo.png" alt="Vehicle.Faker Logo" width="200">
  </a>
  <h3 align="center">Vehicle.Faker</h3>
  <p align="center">
    A <a href="https://fakerphp.github.io/">PHPFaker</a> provider for generating vehicle information like registrations, car makes and car models.
    <!-- <br /> -->
    <!-- <a href="https://github.com/carlwhittick/vehicle.faker"><strong>Explore the docs »</strong></a> -->
    <br />
    <br />
    <a href="#getting-started">Getting Started</a>
    ·
    <a href="https://github.com/carlwhittick/vehicle.faker/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/carlwhittick/vehicle.faker/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* npm
  ```sh
  npm install npm@latest -g
  ```

### Installation

Install the package with Composer
```sh
composer install carlwhittick/vehicle.faker
```

Add the provider to Faker
```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \CarlWhittick\Faker\Vehicle\Provider($faker));
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Usage

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \CarlWhittick\Faker\Vehicle\Provider($faker));

echo $faker->make(); // Ford
echo $faker->model(); // Mondeo
echo $faker->model('BMW'); // 3 series

echo $faker->registration('current'); // AB19 ETG
echo $faker->registration('military'); // 11AE22 
echo $faker->registration('diplomatic'); // 101D454 
echo $faker->registration('prefix'); // P311 LVW 

```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
<!-- ## Roadmap -->
<!---->
<!-- - [ ] Feature 1 -->
<!-- - [ ] Feature 2 -->
<!-- - [ ] Feature 3 -->
<!--     - [ ] Nested Feature -->
<!---->
<!-- See the [open issues](https://github.com/carlwhittick/vehicle.faker/issues) for a full list of proposed features (and known issues). -->
<!---->
<!-- <p align="right">(<a href="#readme-top">back to top</a>)</p> -->



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* [PHPFaker](https://fakerphp.github.io/)
* [faker-vehicle](https://github.com/mattwells/faker-vehicle)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/carlwhittick/vehicle.faker.svg?style=for-the-badge
[contributors-url]: https://github.com/carlwhittick/vehicle.faker/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/carlwhittick/vehicle.faker.svg?style=for-the-badge
[forks-url]: https://github.com/carlwhittick/vehicle.faker/network/members
[stars-shield]: https://img.shields.io/github/stars/carlwhittick/vehicle.faker.svg?style=for-the-badge
[stars-url]: https://github.com/carlwhittick/vehicle.faker/stargazers
[issues-shield]: https://img.shields.io/github/issues/carlwhittick/vehicle.faker.svg?style=for-the-badge
[issues-url]: https://github.com/carlwhittick/vehicle.faker/issues
[license-shield]: https://img.shields.io/github/license/carlwhittick/vehicle.faker.svg?style=for-the-badge
[license-url]: https://github.com/carlwhittick/vehicle.faker/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
