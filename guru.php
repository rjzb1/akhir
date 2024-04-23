<?php

include 'config.php';
$guru = query("SELECT * FROM guru_tbl");

?>

<!DOCTYPE html>
<html>

<head>
	<title>guru</title>
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	<?php include 'navigation.php' ?>
	<div style="margin-top: 50px; height: auto; padding: 100px">
		<section class="img-garis">
			<?php foreach ($guru as $row) : ?>
				<div class="img-circle-wrapper">
					<div class="muncul" data-modal-id="modal<?= $row["id_guru"]; ?>">
						<img src="<?= $row["foto_guru"]; ?>" alt="guru" class="img-circle" height="120px" widht="100px">
					</div>
					<dialog id="modal<?= $row["id_guru"]; ?>">
						<p><?= $row["teks_guru"] ?></p>
						<button class="close-button">Close</button>
					</dialog>

				</div>
			<?php endforeach; ?>

		</section>


		<?php include 'footer.php' ?>
</body>
<script>
	document.querySelectorAll(".muncul").forEach(muncul => {
		muncul.addEventListener("click", () => {
			const modalId = muncul.getAttribute("data-modal-id");
			const modal = document.getElementById(modalId);
			modal.showModal();
			modal.addEventListener("close", () => {
				modal.style.animation = "";
			});
		});
	});


	document.querySelectorAll(".close-button").forEach(button => {
		button.addEventListener("click", () => {
			const modal = button.parentNode;
			modal.close();
		});
	});
</script>
<style>
	@keyframes dialog-show {
		from {
			opacity: 0;
			transform: scale(0.9);
		}

		to {
			opacity: 1;
			transform: scale(1);
		}
	}

	dialog {
		width: 100%;
    max-width: 620px;
    border: none;
    border-radius: 8px;
    padding: 100px;
    background: #fff;
    position: fixed;
    top: 30%;
    left: 30%;
		animation: dialog-show 0.3s ease-out;
		box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
	}

	.close-button {
		position: absolute;
		right: 20px;
		top: 20px;
		background: none;
		border: none;
		font-size: 1.5em;
		cursor: pointer;
	}
</style>

</html>