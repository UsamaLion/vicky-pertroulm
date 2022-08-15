<?php
include('session.php');
include('include/db.php');
$data = array();
$data[1][0] = "0";
$data[1][1] = "0";
$data[1][2] = "0";
$data[1][3] = "0";
$data[1][4] = "0";
$data[1][5] = "0";
$data[1][6] = "0";
$data[1][7] = "0";
$data[1][8] = "0";
$data[1][9] = "0";
$data[1][10] = "0";
$data[1][11] = "0";
$data[2][0] = "0";
$data[2][1] = "0";
$data[2][2] = "0";
$data[2][3] = "0";
$data[2][4] = "0";
$data[2][5] = "0";
$data[2][6] = "0";
$data[2][7] = "0";
$data[2][8] = "0";
$data[2][9] = "0";
$data[2][10] = "0";
$data[2][11] = "0";
$monthquery = mysqli_query($con,"select Month(m_date) as month from ratings where artist_id='$id' group by Month(m_date) ") or die("ERROR MYSQL : stats fetch error!");

while($monthdata = mysqli_fetch_array($monthquery))
{
    $data[0][] = $monthdata['month'];
}

$superlikes = mysqli_query($con,"select count(id) as superlikes, Month(m_date) as month from ratings where liketype=1 and artist_id='$id' group by Month(m_date) ") or die("ERROR MYSQL : stats fetch error!");
while($superlieksdata = mysqli_fetch_array($superlikes))
{
    if($superlieksdata['month']==1)
    {
        $data[1][0] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==2)
    {
        $data[1][1] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==3)
    {
        $data[1][2] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==4)
    {
        $data[1][3] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==5)
    {
        $data[1][4] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==6)
    {
        $data[1][5] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==7)
    {
        $data[1][6] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==8)
    {
        $data[1][7] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==9)
    {
        $data[1][8] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==10)
    {
        $data[1][9] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==11)
    {
        $data[1][10] = $superlieksdata['superlikes'];
    }
    if($superlieksdata['month']==12)
    {
        $data[1][11] = $superlieksdata['superlikes'];
    }
}
$likes = mysqli_query($con,"select count(id) as likes, Month(m_date) as month from ratings where liketype=2 and artist_id='$id' group by Month(m_date) ") or die("ERROR MYSQL : stats fetch error!");
while($likesdata = mysqli_fetch_array($likes))
{
    if($likesdata['month']==1)
    {
        $data[2][0] = $likesdata['likes'];
    }
    if($likesdata['month']==2)
    {
        $data[2][1] = $likesdata['likes'];
    }
    if($likesdata['month']==3)
    {
        $data[2][2] = $likesdata['likes'];
    }
    if($likesdata['month']==4)
    {
        $data[2][3] = $likesdata['likes'];
    }
    if($likesdata['month']==5)
    {
        $data[2][4] = $likesdata['likes'];
    }
    if($likesdata['month']==6)
    {
        $data[2][5] = $likesdata['likes'];
    }
    if($likesdata['month']==7)
    {
        $data[2][6] = $likesdata['likes'];
    }
    if($likesdata['month']==8)
    {
        $data[2][7] = $likesdata['likes'];
    }
    if($likesdata['month']==9)
    {
        $data[2][8] = $likesdata['likes'];
    }
    if($likesdata['month']==10)
    {
        $data[2][9] = $likesdata['likes'];
    }
    if($likesdata['month']==11)
    {
        $data[2][10] = $likesdata['likes'];
    }
    if($likesdata['month']==12)
    {
        $data[2][11] = $likesdata['likes'];
    }
}
echo json_encode($data);
?>