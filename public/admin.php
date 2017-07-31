<?php
require_once('services/ScheduleManager.php');
$scheduleMgr = new ScheduleManager();


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <main class="site-wrapper">
      <?php $scheduleMgr->build_schedule(); ?>
      <h1>Current Schedule</h1>
      <div class="current-schedule">
        <h2 class="current-date"></h2>
        <ul class="week">
          <li class="weekday">
            <p class="label">Monday</p>
            <form class="addClassesForm">
              <select class="instructors">
                <option>Dan</option>
                <option>Leslie</option>
                <option>Christian</option>
              </select>
              <button type="button" class="addClass">Add Class</button>
              <ul class="classes">
                <li>Dan Beginning Hip Hop 6:30pm-7:30pm</li>
              </ul>
              <button type="submit" class='saveSchedule'>Save Schedule</button>
            </form>


          </li>
          <li class="weekday">
            <p class="label">Tuesday</p>
            <select class="instructors"></select>
            <ul class="classes">
              <li>Dan Beginning Hip Hop 6:30pm-7:30pm</li>
            </ul>
          </li>
          <li class="weekday">
            <p class="label">Wednesday</p>
            <select class="instructors">
            </select>
            <ul class="classes">
              <li>Dan Beginning Hip Hop 6:30pm-7:30pm</li>
            </ul>
          </li>
          <li class="weekday">
            <p class="label">Thursday</p>
            <select class="instructors">
            </select>
            <ul class="classes">
              <li class="dance-class">Dan Beginning Hip Hop 6:30pm-7:30pm</li>
            </ul>
          </li>
          <li class="weekday">
            <p class="label">Friday</p>
            <select class="instructors">
            </select>
            <ul class="classes">
              <li>Dan Beginning Hip Hop 6:30pm-7:30pm</li>
            </ul>
          </li>
          <li class="weekday">
            <p class="label">Saturday</p>
            <select class="instructors">
            </select>
            <ul class="classes">
              <li>Dan Beginning Hip Hop 6:30pm-7:30pm</li>
            </ul>
          </li>
          <li class="weekday">
            <p class="label">Sunday</p>
            <select class="instructors">
            </select>
            <ul class="classes">
              <li>Dan Beginning Hip Hop 6:30pm-7:30pm</li>
            </ul>
          </li>
        </ul>
      </div>
    </main>
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
      var currentDate = new Date().toDateString();
      $('.current-date').text(currentDate);

      var addClassBtns = Array.prototype.slice.call(document.getElementsByClassName('addClass'));
      addClassBtns.forEach(function(el, idx) {
        el.addEventListener('click', addClass);
      });
      var classForms = Array.prototype.slice.call(document.getElementsByClassName('addClassesForm'));
      classForms.forEach(function(el, idx) {
        el.addEventListener('submit', saveScheduleForDay);
      });

      function addClass(ev) {
        ev.preventDefault();
        var instructor = $(this).parent().find('select').val();
        var daySchedule = $(this).parent().find('ul.classes');
        var newClass = '<li class="dance-class">' + instructor + '</li>';
        $(daySchedule).append(newClass);
      }
      function saveScheduleForDay(ev) {
        ev.preventDefault();
      }
    </script>
  </body>
</html>
