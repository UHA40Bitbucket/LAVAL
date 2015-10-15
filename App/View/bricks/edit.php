<div class="container contcolor">
    <div id="deco_blanc3"></div>
    <div class="col-sm-12 cadre">
        <div class="entete"></div>
        <div class="panel">
            <div class="panel-heading enteteFlou">
                <h1>BRICKS</h1>

                <div class="cercle">
                    <img
                        src="<?php echo URL ?>public/img/connexion.png"
                        alt="logo" height="63px" width="71px"
                        style="top: 18px; position: relative; left: 12px"/>
                </div>
            </div>
            <div class="panel-body panelCategorie panelSession">
                <div class="panel panel-default">
                    <div class="panel-body containerEditForm">

                        <h1>Add/Edit Brick</h1>

                        <form class="form-horizontal" method="post">
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input id="brick[name]" name="brick[name]" type="text"
                                               placeholder="Session's name"
                                               class="floating-label form-control input-md">
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="togglebutton togglebutton-material-green">
                                            <label class="text-left">
                                                <input id="session[publish]" name="session[publish]" type="checkbox"
                                                       checked="">Publish
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <select id="session[lessonlist]" name="session[lessonlist]"
                                                class="form-control">
                                            <option value="1">Liste des leçons disponibles</option>
                                        </select>

                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" id="session[addLesson]" name="session[addLesson]"
                                                class="btn btn-flat btn-info btn-sm">add
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" id="session[save]" name="session[save]"
                                            class="btn btn-success">Save
                                    </button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
                <h1>Bricks list</h1>
                <table id="brickTable" class="table table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Media</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Session 1</td>
                        <td>WAV</td>
                        <td>fichier.wav</td>
                        <td>
                            <button class="btn btn-flat btn-info btn-sm btn-td">edit</button>
                            <button class="btn btn-flat btn-warning btn-sm btn-td">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Session 2</td>
                        <td>TTS</td>
                        <td>BLA BLA BLA BLA</td>
                        <td>
                            <button class="btn btn-flat btn-info btn-sm btn-td">edit</button>
                            <button class="btn btn-flat btn-warning btn-sm btn-td">delete</button>
                        </td>
                    </tr>
                    </tbody>

                </table>
                <div class="brickSession"></div>
            </div>
        </div>
    </div>
</div>
