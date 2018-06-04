<?php
	if(isset($_POST['0'])){
		header('Location: totalSold.php');
			}
	if(isset($_POST['1'])){
		header('Location: soldtoCharity.php');
			}
	if(isset($_POST['2'])){
		header('Location: largeSocksSold.php');
			}
	if(isset($_POST['3'])){
		header('Location: sockstobeDelivered.php');
			}
	if(isset($_POST['4'])){
		header('Location: searchbyEmail.php'); 
			}
	if(isset($_POST['5'])){
		header('Location: addNewCharity.php');
			}
	if(isset($_POST['6'])){
		header('Location: export.php');
			}
	if(isset($_POST['7'])){
		header('Location: decriptCreditCard.php');
			}
	if(isset($_POST['8'])){
		header('Location: addNewAdministrator.php');
			}
	if(isset($_POST['9'])){
		header('Location: deleteUserbyEmail.php');
			}
?>