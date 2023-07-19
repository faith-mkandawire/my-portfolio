 <?php
require_once "connection.php";
?>
 <!DOCTYPE html>
<html>
<head>
  <title>Skills</title>
  <style>
  .menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color:#0082e6;
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
    .skills-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
    }

    .skill {
      width: 200px;
      margin: 20px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
    }

    .skill:hover {
      transform: scale(1.05);
    }

    .skill .name {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .skill .description {
      font-size: 14px;
      margin-bottom: 10px;
    }

    .skill .chart {
      width: 100%;
      height: 10px;
      background-color: #ddd;
      border-radius: 5px;
      overflow: hidden;
    }

    .skill .chart-fill {
      height: 100%;
      background-color:  #0082e6;
      width: 0;
      transition: width 1s ease-in-out;
    }

    .tooltip {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .tooltip .tooltip-text {
      visibility: hidden;
      width: 200px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip:hover .tooltip-text {
      visibility: visible;
      opacity: 1;
    }

    body {
      background-image: url("fly7.jpg");
      background-size: cover;
      background-position: center;
      font-size: 18px;

    }
    
    h1 {
      text-align: center;
      color: white;
    }
  </style>
  <script>
  function animateChart() {
  const charts = document.querySelectorAll('.chart');
  charts.forEach(chart => {
    const fill = chart.querySelector('.chart-fill');
    const proficiency = parseInt(chart.parentElement.getAttribute('data-proficiency'));

    let width = 0;
    const interval = setInterval(() => {
      if (width >= proficiency) {
        clearInterval(interval);
      } else {
        width++;
        fill.style.width = `${width}%`;
      }
    }, 10);
  });
}
</script>

</head>
<body onload="animateChart()">
  <h1>Skills</h1>
   <header>
  <nav>
    <ul class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="skills.html">Skills</a></li>
    </ul>
  </nav>
</header>

  <div class="skills-container">
    <div class="skill" data-proficiency="90">
      <div class="name">HTML</div>
      <div class="description">Hypertext Markup Language</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">HTML is the standard markup language for creating web pages.</span>
      </div>
    </div>

    <div class="skill" data-proficiency="85">
      <div class="name">CSS</div>
      <div class="description">Cascading Style Sheets</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">CSS is a style sheet language used for describing the look and formatting of a document written in HTML.</span>
      </div>
    </div>

    <div class="skill" data-proficiency="70">
      <div class="name">JavaScript</div>
      <div class="description">Programming Language</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">JavaScript is a high-level, interpreted programming language that enables interactive web pages and web applications.</span>
      </div>
    </div>

    <div class="skill" data-proficiency="65">
      <div class="name">Java</div>
      <div class="description">Programming Language</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</span>
      </div>
    </div>

    <div class="skill" data-proficiency="55">
      <div class="name">Python</div>
      <div class="description">Programming Language</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">Python is a popular high-level programming language known for its simplicity and readability.</span>
      </div>
    </div>

    <div class="skill" data-proficiency="80">
      <div class="name">GitHub</div>
      <div class="description">Version Control System</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">GitHub is where over 100 million developers shape the future of software, together.</span>
      </div>
    </div>
  </div>
</body>
</html>
