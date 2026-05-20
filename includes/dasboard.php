<?php include('config/conexao.php'); ?>
<div class="main">
        <div class="cards">
            <div class="card">
                <div class="card-content"> 
                    <div class="icon-box">
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="number">
                    <?php
            $sql="SELECT * FROM professor";
            $res=$conn->query($sql);
           $qtd = $res->num_rows;
                # code...
                print" <p> <b>$qtd</b></p>";
            
            
        ?> 
                    </div>
                    <div class="card-name">Professor</div>
               
                </div>
            </div>
        </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content"> 
                         <div class="icon-box">
                            <i class='bx bx-building'></i>
                        </div>
                        <div class="number">
                        <?php
            $sql="SELECT * FROM departamento";
            $res=$conn->query($sql);
           $row = $res->num_rows;
                # code...
                print" <p> <b>$row</b></p>";
            
            
        ?> 
                        </div>
                        <div class="card-name">Departamentos</div>
                       
                    </div>
                </div>
            </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-content"> 
                           <div class="icon-box">
                                <i class='bx bxs-user'></i>
                            </div>
                            <div class="number">
                            <?php
            $sql="SELECT * FROM curso";
            $res=$conn->query($sql);
           $row = $res->num_rows;
                # code...
                print" <p> <b>$row</b></p>";
            
            
        ?> 
                            </div>
                            <div class="card-name">curso</div>
                            
                        </div>
                    </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <div class="card-content"> 
                              <div class="icon-box">
                                    <i class='bx bxs-user'></i>
                                </div>
                                <div class="number">
                                <?php
            $sql="SELECT * FROM estudante";
            $res=$conn->query($sql);
           $row = $res->num_rows;
                # code...
                print" <p> <b>$row</b></p>";
            
            
        ?> 
                                </div>
                                <div class="card-name">estudante</div>
                                
                            </div>
                        </div>
                        </div>
                        <br><br><br>
                             
                <table border="1" width="100%" id="table" >
                    <h1 style="color:#013f86; text-align:center;">
                        REGISTRO RECENTE
                    </h1>
    <tr align="center" style=" background: #013f86; color: #fff;" >
        <th>Matricula</th>
        <th>Nome</th>
        <th>Curso</th>
        <th>Data</th>
    </tr>
    <?php 
   $sql="SELECT * FROM estudante AS E INNER JOIN curso AS c ON E.cursocod=c.codigo ORDER BY data ASC";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr>
        <td><?= $row['matricula'] ?></td>
        <td><?= $row['nomea'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['data'] ?></td>
    </tr>
    <?php 
}
    ?>
</table>

