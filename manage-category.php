<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flexbox Admin Template</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("http://fonts.googleapis.com/css?family=Open+Sans");
@import url("http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*:before, *:after {
  content: '';
  display: block;
  position: absolute;
}

html, body {
  height: 100%;
}

body {
  font: 15px/1 'Open Sans', sans-serif;
  color: #777;
}

a {
  cursor: pointer;
}

ul {
  list-style: none;
}

.wrapper {
  display: flex;
  min-height: 100%;
}

nav {
  width: 200px;
  background: #404040;
}

nav header {
  position: relative;
  height: 80px;
  padding: 20px 0 0 15px;
  font-size: 16px;
  color: #fff;
  background: #333333;
}

nav header span {
  position: relative;
  display: inline-block;
  width: 36px;
  height: 36px;
  margin: 0 10px 0 0;
  vertical-align: middle;
  border: 1px solid #fff;
}

nav header span:before {
  content: '\f007';
  font: normal 20px fontawesome;
  top: 7px;
  left: 9px;
}

nav header a:before {
  content: '\f08b';
  font: normal 20px fontawesome;
  top: 28px;
  right: 15px;
}

nav ul span {
  display: block;
  padding: 15px;
  color: rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
  border-bottom: 1px solid #333333;
}

nav ul a {
  position: relative;
  display: block;
  padding: 15px 15px 17px 50px;
  color: #fff;
  border-bottom: 1px solid #333333;
}

nav ul a:hover,
nav ul a.active {
  background: #535353;
}

nav ul a:before {
  font: normal 16px fontawesome;
  top: 15px;
  left: 18px;
}

nav ul li:nth-child(2) a:before {
  content: '\f00a';
}

nav ul li:nth-child(3) a:before {
  content: '\f012';
}

nav ul li:nth-child(4) a:before {
  content: '\f018';
}

nav ul li:nth-child(5) a:before {
  content: '\f024';
}

nav ul li:nth-child(6) a:before {
  content: '\f0c3';
}

nav ul li:nth-child(7) a:before {
  content: '\f09b';
}

nav ul li:nth-child(8) a:before {
  content: '\f0fa';
}

nav ul li:nth-child(10) a:before {
  content: '\f002';
}

nav ul li:nth-child(11) a:before {
  content: '\f085';
}

nav ul li:nth-child(12) a:before {
  content: '\f08b';
}

main {
  flex: 1;
  padding: 25px;
  background: #f5f5f5;
}

main h1 {
  height: 80px;
  margin: -25px -25px 25px -25px;
  padding: 0 25px;
  line-height: 76px;
  font-size: 24px;
  font-weight: 400;
  background: #ddd;
}

.flex-grid {
  display: flex;
}

.flex-grid > div {
  flex: 1;
  margin: 0 20px 20px 0;
  padding: 15px;
  border: 1px solid #ddd;
  background: #fff;
}

.flex-grid > div:last-child {
  margin-right: 0;
}

.flex-grid h2 {
  margin: -15px -15px 15px -15px;
  padding: 12px 15px;
  font-size: 14px;
  font-weight: 400;
  border-bottom: 1px solid #ddd;
}

.flex-grid li {
  position: relative;
  margin: 0 0 10px;
  padding: 0 0 0 25px;
}

.flex-grid li:before {
  content: '\f00c';
  font: normal 16px fontawesome;
  top: 0;
  left: 0;
  color: #999;
}

/*
** Media Queries
***********************************************************/
@media (max-width: 1000px) {
  .flex-grid {
    flex-direction: column;
  }

  .flex-grid > div {
    margin-right: 0;
  }
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">

  <nav>

    <header>
      <span></span>
      John Doe
      <a></a>
    </header>

    <ul>
      <li><span>Navigation</span></li>
      <li><a class="active">Dashboard</a></li>
      <li><a>Statistics</a></li>
      <li><a>Roadmap</a></li>
      <li><a>Milestones</a></li>
      <li><a>Tickets</a></li>
      <li><a>GitHub</a></li>
      <li><a>FAQ</a></li>
      <li><span>Other</span></li>
      <li><a>Search</a></li>
      <li><a>Settings</a></li>
      <li><a>Logout</a></li>
    </ul>

  </nav>

  <main>

    <h1>Flexbox Admin Template</h1>

    <div class="flex-grid">
      <div>
        <h2>Clean CSS Code</h2>
        <ul>
          <li>no position: absolute</li>
          <li>no float</li>
          <li>no clearfix</li>
          <li>no faux columns</li>
          <li>no javascript</li>
        </ul>
      </div>
      <div>
        <h2>Font Awesome</h2>
        <ul>
          <li>no images</li>
          <li>no extra retina sprites</li>
        </ul>
      </div>
      <div>
        <h2>SCSS</h2>
        <ul>
          <li>no headache :)</li>
        </ul>
      </div>
    </div>

    <div class="flex-grid">
      <div>
        <h2>Headline</h2>
        Some Content
      </div>
      <div>
        <h2>Headline</h2>
        Some Content
      </div>
    </div>

    <div class="flex-grid">
      <div>
        <h2>Headline</h2>
        Some Content
      </div>
    </div>

  </main>

</div>
  
  
</body>
</html>
