<?php

$searchText = $_GET['search-text'];


?>

<!-- search template 2 -->
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="content">
                <div class="pull-middle">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="/search" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Now" name='search_text' value='<?php echo $searchText; ?>'>
                                    <span class="input-group-btn">
                                        <button class="btn btn-success btn-circle" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>