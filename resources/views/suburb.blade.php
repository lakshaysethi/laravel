<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Suburb</title>
    </head>
    <body>
        Suburb List<br>
        <table>
            <thead>
                <tr>
                    <td>Suburb</td>
                    <td>District</td>
                </tr>
            </thead>
            <tbody>
                @if(isset($suburbs) && count($suburbs)>0)
                    @foreach ($suburbs as $suburb)
                    <tr>
                        <td>{{ $suburb->suburbName }}</td>
                        <td>{{ $suburb->district }} </td>>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2" style="text-align: center;">No Data</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <form name="frmAddSuburb" method="post" action="addSuburbAct">
            {{ csrf_field() }}
            <select name="district">
            @if(isset($districts) && count($districts)>0)
                @foreach ($districts as $district)
                <option value="{{ $district->districtID }}" style="font-color:grey;">{{ $district->districtName }}</option>
                @endforeach
            @endif
            </select>
            <input type="file" name="fileSuburb" />
            <?php
                /*echo Form::open(array('url'=>'files\suburb\AucklandCity.txt','files'=>'true'));
                echo 'Select the file to open.';
                echo Form::file('suburbList');
                echo Form::submit('Save');
                echo Form::close();*/
            ?>
            <?php
                $filename = 'files\suburb\AucklandCity.txt';
                $suburblist = array();
                if (file_exists($filename) && is_readable ($filename)) {
                    $fileResource  = fopen($filename, "r");
                    if ($fileResource) {
                        while (($line = fgets($fileResource)) !== false) {
                            //echo $line.'<br>';
                            $line = rtrim($line);
                            array_push($suburblist, $line);
                        }
                        fclose($fileResource);
                    } 
                }
                /*foreach($suburblist as $suburbName){
                    echo $suburbName.',<br/>';
                }*/
            ?>
            <inpyt type="hidden" name="suburbList" value="<?php $suburblist ?>">
            <input type="submit" value="save">
        </form>
    </body>
</html>