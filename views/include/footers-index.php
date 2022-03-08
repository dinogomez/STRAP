
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/479c08de1d.js" crossorigin="anonymous"></script>

    <?php if (isset($_COOKIE['loginError'])) { ?>
    <script type="text/javascript">
        $("#exampleModal").modal("show");
    </script>
    <?php } ?>
    <?php if (isset($_COOKIE['errorRegister'])) { ?>
    <script type="text/javascript">
        $("#registerModal").modal("show");
    </script>
    <?php } ?>
    <?php if (isset($_COOKIE['trackerRegisterError'])) { ?>
    <script type="text/javascript">
        $("#trackerModal").modal("show");
    </script>
    <?php } ?>
   
    
</body>
</html>