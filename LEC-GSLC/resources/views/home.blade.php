@extends('template')

@section('body')

<div style="margin-left: 150px; margin-right: 150px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
  <div style="padding: 50px; background-color:aliceblue; display: flex; align-items:center ; justify-content: space-between; text-align:center">
    <div>
      <h1>2</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "2 x ".$i." = ".$i*2 ?>
        </div>
      @endfor
    </div>
  
    <div>
      <h1>3</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "3 x ".$i." = ".$i*3 ?>
        </div>
      @endfor
    </div>
  
    <div>
      <h1>4</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "4 x ".$i." = ".$i*4 ?>
        </div>
      @endfor
    </div>
  
    <div>
      <h1>5</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "5 x ".$i." = ".$i*5 ?>
        </div>
      @endfor
    </div>

    <div>
      <h1>6</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "6 x ".$i." = ".$i*6 ?>
        </div>
      @endfor
    </div>

    <div>
      <h1>7</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "7 x ".$i." = ".$i*7 ?>
        </div>
      @endfor
    </div>

    <div>
      <h1>8</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "8 x ".$i." = ".$i*8 ?>
        </div>
      @endfor
    </div>

    <div>
      <h1>9</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "9 x ".$i." = ".$i*9 ?>
        </div>
      @endfor
    </div>

    <div>
      <h1>10</h1>
      @for($i=1; $i<=10; $i++)
        <div>
          <?php echo "10 x ".$i." = ".$i*10 ?>
        </div>
      @endfor
    </div>

  </div>
  
</div>

@endsection
