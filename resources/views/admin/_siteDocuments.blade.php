<div class="panel panel-warning" id="admin-main-panel">
    <div class="panel-heading"><h3><i class="fa fa-file"></i> Documents </h3></div>
    <div class="panel-body">
        <p> The following documents are <a href="/downloads">publicly available</a> for download: </p>
        @include('admin._downloadableFiles')
        <p>Note: </p>

        <ol class="alert-info">
            <li>To replace an existing document with an updated version, add the new version with a name similar to the old one you wish to replace.</li>
            <li>Document should be in pdf format.</li>
        </ol>

        <a class="btn btn-primary" data-toggle="collapse" href="#addDoc" aria-expanded="false" aria-controls="">
            <i class="fa fa-plus"></i> Add Document
        </a>

        <div class="collapse" id="addDoc">
            <br>
            <div class="well">
                @include('admin._uploadDocForm')
            </div>
        </div>

    </div>
</div>