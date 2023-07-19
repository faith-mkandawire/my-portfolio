<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Projects</title>
  <style>
  .menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
  }
  
  .menu li {
    display: inline-block;
    margin-right: 10px;
  }
  
  .menu li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    border-bottom: 2px solid transparent;
    transition: border-bottom 0.3s ease-in-out;
  }
  
  .menu li a:hover {
    border-bottom: 2px solid #333;
  }
  
  .menu li a.active {
    border-bottom: 2px solid #333;
  }

    .project {
      display: flex;
      margin-bottom: 20px;
      cursor: pointer;
    }

    .project .screenshot {
      flex: 1;
      margin-right: 20px;
    }

    .project .details {
      flex: 2;
    }

    .project .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .project .description {
      margin-bottom: 10px;
    }

    .project .link {
      display: inline-block;
      margin-right: 10px;
    }

    .filter {
      margin-bottom: 10px;
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      padding: 20px;
    }

    .modal-content {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .progress-bar {
      width: 100%;
      height: 20px;
      background-color: #ddd;
      border-radius: 10px;
      overflow: hidden;
    }

    .progress-bar-fill {
      height: 100%;
      background-color: #0082e6;
      width: 0;
      transition: width 1s ease-in-out;
    }

    body {
      background-color: silver;
      background-image: url("fly5.jpg");
      color: black;
      font-size: 18px;
    }
  </style>
  <script>
   function filterProjects() {
  const categoryFilter = document.querySelector('#category-filter-2').value.toLowerCase();

  const searchQuery = document.querySelector('#search-input').value.toLowerCase();

  const projects = document.querySelectorAll('.project');

  projects.forEach(project => {
    const category = project.getAttribute('data-category').toLowerCase();
    const title = project.querySelector('.title').textContent.toLowerCase();
    const description = project.querySelector('.description').textContent.toLowerCase();

    const isCategoryMatch = categoryFilter === 'all' || category === categoryFilter;

    const isSearchMatch =
      searchQuery === '' ||
      title.includes(searchQuery) ||
      description.includes(searchQuery);

    if (isCategoryMatch && isSearchMatch) {
      project.style.display = 'flex';
    } else {
      project.style.display = 'none';
    }
  });
}


    function openModal(projectId) {
      const modal = document.querySelector('#modal');
      const modalContent = document.querySelector('#modal-content');
      const projectDetails = document.querySelector(`#${projectId}`);

      modalContent.innerHTML = projectDetails.innerHTML;
      modal.style.display = 'block';
    }

    function closeModal() {
      const modal = document.querySelector('#modal');
      modal.style.display = 'none';
    }

    function updateProgressBar(projectId) {
      const progressBar = document.querySelector(`#${projectId} .progress-bar-fill`);
      const progress = parseInt(progressBar.getAttribute('data-progress'));

      let width = 0;
      const interval = setInterval(() => {
        if (width >= progress) {
          clearInterval(interval);
        } else {
          width++;
          progressBar.style.width = `${width}%`;
        }
      }, 10);
    }
  </script>

</head>
<body>
  <header>
  <nav>
    <ul class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="skills.php">Skills</a></li>
      <li><label for="search-input">Search:</label>
    <input type="text" id="search-input" oninput="filterProjects()"></li>
    <li><div class="filter"><label for="category-filter">Category:</label>
    <select id="category-filter" onchange="filterProjects()">
      <option value="all">All</option>
      <option value="Flying Things">flying things</option>
      <option value="The Voice">the voice</option>
    </select></div></li>
    </ul>
  </nav>
</header>

  <h1>Projects</h1>

  <br>
  <br>

  <div class="project" data-category="web" onclick="openModal('project1')">
    <div class="screenshot">
      <img src="fly7.jpg" alt="Project 1 Screenshot" width="300">
    </div>
    <div class="details" id="project1">
      <h2 class="title">flying things</h2>
      <p class="description">This is a website designed for educational purpose on drones. It focuses mainly on helping people to deliver medical stuff,capture contents ,to know its in-built functions just to say a few..</p>
      <br>
      <caption>progress</caption>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="45"></div>
      </div>
      <a class="link" href="home.html">View Site</a>
    </div>
  </div>

  <div class="project" data-category="web" onclick="openModal('project2')">
    <div class="screenshot">
      <img src="rrr.jpg" alt="Project 2 Screenshot" width="300">
    </div>
    <div class="details" id="project2">
      <h2 class="title">The voice</h2>
      <p class="description">This is a social platform where different kinds of people interact and express their deep dark thoughts,without being judged or feel any kind of oppression. This platform called the voice was created by a young lady miss faith mkandawire in the year 2018. Miss faith created the "THE VOICE" after encountering that many young stars are being shut-down to express their deep feelings.</p>
      <br>
      <caption>progress</caption>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="50"></div>
      </div>
      <a class="link" href="index.html">View Site</a>
    </div>
  </div>

  <div id="modal" class="modal" onclick="closeModal()">
    <div id="modal-content" class="modal-content"></div>
  </div>

  <script>
    // Initialize progress bars
    updateProgressBar('project1');
    updateProgressBar('project2');
  </script>
 
</body>
</html>
