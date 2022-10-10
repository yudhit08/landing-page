<?php
$name = $_POST["name"];
$email = $_POST["email"];

if ($_POST['email']) {
    include "dbh.inc.php";
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    $row = mysqli_num_rows($result);
    if ($row < 1) {
        $token = md5($_POST['email']) . rand(10, 9999);
        mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link , password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
        $link = "http://localhost/landing-page/include/verify-email.php?key=" . $_POST['email'] . "&token=" . $token . "";
?>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
            (function() {
                emailjs.init('H2FlZXszbDFyuEjoF');
            })();
        </script>

        <script type="text/javascript">
            window.onload = () => {
                document.getElementById('link-form').addEventListener('submit', (event) => {
                    event.preventDefault();
                    // these IDs from the previous steps
                    emailjs.sendForm('service_vvful8t', 'template_ih5exbc', event.target, 'H2FlZXszbDFyuEjoF')
                        .then(
                            result => {
                                swal({
                                    title: "Success",
                                    text: "Your message has been sent!",
                                    icon: "success",

                                });;
                            }, error => {
                                console.log(error.text);
                            });
                    document.getElementById("name").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("message").value = "";
                });
            }
        </script>
        <form method="POST" id="link-form" name="linkForm" class="p-6 flex flex-col justify-center">
            <div class="flex flex-col">
                <label for="name" class="hidden">Full Name</label>
                <input autocomplete="off" value="<?php echo htmlspecialchars($name);?>" type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" required>
            </div>

            <div class="flex flex-col mt-2">
                <label for="email" class="hidden">Email</label>
                <input autocomplete="off" value="<?php echo htmlspecialchars($email);?>" type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" required>
            </div>

            <div class="flex flex-col mt-2">
                <input autocomplete="off" value="<?php echo $link;?>" type="name" name="message" id="message" placeholder="Message" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" required></input>
            </div>

            <button type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                Click to send verification link
            </button>
        </form>
<?php
        /*
        require_once('phpmail/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        // enable SMTP authentication
        $mail->SMTPAuth = true;                  
        // GMAIL username
        $mail->Username = "your_email_id@gmail.com";
        // GMAIL password
        $mail->Password = "your_gmail_password";
        $mail->SMTPSecure = "ssl";  
        // sets GMAIL as the SMTP server
        $mail->Host = "smtp.gmail.com";
        // set the SMTP port for the GMAIL server
        $mail->Port = "465";
        $mail->From='your_gmail_id@gmail.com';
        $mail->FromName='your_name';
        $mail->AddAddress('reciever_email_id', 'reciever_name');
        $mail->Subject  =  'Reset Password';
        $mail->IsHTML(true);
        $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
        if ($mail->Send()) {
                    echo "Check Your Email box and Click on the email verification link.";
                } else {
                    echo "Mail Error - >" . $mail->ErrorInfo;
                }
            } else {
                echo "You have already registered with us. Check Your email box and verify email.";
            }
        }


        /* Tambahkan send mail handler disini
        header("Location: http://localhost/landing-page/index.php");
        /* ---------------------------------- */
        
    }
    
}
?>