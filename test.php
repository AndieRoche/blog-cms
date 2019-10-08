<html>

<head>
</head>

<body>
  <div id="list-container">
    <input class="search" placeholder="Search">
    <button class="sort" data-sort="name">
      Sort by name
    </button>
    <ul class="buisList">
      <li>
        <a href="javascript:void(0);" class="listItem">Century 21</a>
        
      </li>
      <li>
          <a href="javascript:void(0);" class="listItem">Michaels</a>
       
      </li>
      <li>
        <a href="javascript:void(0);" class="listItem">GameStop</a>
       
      </li>
     
    </ul>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
  <script type="text/javascript">
    var options = {
        valueNames: [ 'listItem' ],
        listClass: 'buisList'
    };

    var newList = new List('list-container', options);
  </script>

</body>

</html>