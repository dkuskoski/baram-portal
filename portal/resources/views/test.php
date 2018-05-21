<?php 
try{
    if(DB::connection()->getDatabaseName())
{
 echo "connected successfully to database ".DB::connection()->getDatabaseName();
} else {
   echo "kaj mi e bazata?";
}
}catch(\Exception $e){
    echo "kaj mi e bazata?";
}
?>