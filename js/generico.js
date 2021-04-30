function switch_theme(logo){
    document.body.classList.toggle("light-mode")

    if(document.body.classList.contains("light-mode")){
        logo.src = "images/logo_letter_g(black).png"
        logo.title = "Dark Mode"

        document.getElementById("linkedin-logo").src = "images/linkedin_icon(black).png"
        document.getElementById("github-logo").src = "images/github_icon(black).png"
    }

    else{
        logo.src = "images/logo_letter_g.png"
        logo.title = "Light Mode"
        
        document.getElementById("linkedin-logo").src = "images/linkedin_icon.png"
        document.getElementById("github-logo").src = "images/github_icon.png"
    }
}