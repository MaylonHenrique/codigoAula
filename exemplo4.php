<style>
div{
height: 40px;
  /*border> 1px solid black;*/
}
.nota{
    width: 50px;
}
label{
   font-weight: bold;
  }
</style>
<form action="controlenota.php" method="get">
    <div>
    <label>Ano</label>
    <input type="text" name="Ano">
    </div>
  <div>
      <label>Aluno</label>
      <input class="nota" type="text" name="Aluno">
   </div>
   <div>
       <label>Nota1</label>
       <input class="nota"type="text" name="n1">
   </div>
   <div>
       <label>nota2</label>
       <input class="nota"type="text" name="n2">
    </div>
    <div>
       <label>Nota3</label>
       <input class="nota"type="text" name="n3">    
    
    </div>  
    <div>
        <label>Nota4</label>
        <input class="nota"type="text" name="n4">
    </div>   
   <div> 
   <input type="submit" value="Calcular">
   <input  type="reset" value="Limpar">
   </div>      
</form>