<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_a1af68343ab2cc79cdf4bdc4505250d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "</head>

<body>
   


  <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
           

        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>SmartStep ELearn</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Acceuil</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Formations</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Plan d'etudes</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Matieres</a>
                        <a href=\"404.html\" class=\"dropdown-item\">Cours</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Vie Etudiante</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Evenements</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Classes</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Emplois</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Quiz</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>

            </div>
            ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90)) {
            // line 91
            echo "\t\t\t\t ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 92
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t ";
            }
            // line 94
            echo "\t\t\t\t  <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "fullName", [], "any", false, false, false, 94), "html", null, true);
            echo "</span>
            <p><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Logout</span> </a> </p>
\t\t\t";
        } else {
            // line 97
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 100
        echo "        </div>
      

    </nav>

    <!-- Navbar End -->

 ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "   
    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Contact</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                
                       
               
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

   ";
        // line 191
        $this->displayBlock('javascript', $context, $blocks);
        // line 203
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "eLEARNING - eLearning HTML Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">
     
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
    .text-primary {
    color: #731010 !important;
}
  .btn-primary {
    color: #000;
    background-color: #731010;
    border-color: #731010;
}
:root {
    --primary: #731010;
    --light: #F0FBFC;
    --dark: #181d38;
}
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo " 
    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Instructors</h6>
                <h1 class=\"mb-5\">Welcome</h1>
            </div>
            <div class=\"row g-4\">
                
               
<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/team-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Team End -->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 192
        echo "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
   
    <!-- Template Javascript -->
        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 201,  375 => 198,  371 => 197,  367 => 196,  363 => 195,  358 => 192,  348 => 191,  305 => 108,  295 => 107,  268 => 32,  262 => 29,  243 => 12,  233 => 11,  214 => 7,  202 => 203,  200 => 191,  149 => 142,  147 => 107,  138 => 100,  133 => 98,  128 => 97,  123 => 95,  118 => 94,  112 => 92,  109 => 91,  107 => 90,  64 => 49,  62 => 11,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    
    <title>{% block title %}eLEARNING - eLearning HTML Template{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    {% block stylesheets %}
    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">
     
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
    <style>
    .text-primary {
    color: #731010 !important;
}
  .btn-primary {
    color: #000;
    background-color: #731010;
    border-color: #731010;
}
:root {
    --primary: #731010;
    --light: #F0FBFC;
    --dark: #181d38;
}
    </style>
    {% endblock %}
</head>

<body>
   


  <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
           

        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>SmartStep ELearn</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Acceuil</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Formations</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Plan d'etudes</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Matieres</a>
                        <a href=\"404.html\" class=\"dropdown-item\">Cours</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Vie Etudiante</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Evenements</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Classes</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Emplois</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Quiz</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>

            </div>
            {% if app.user %}
\t\t\t\t {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t <p><a href=\"{{ path('admin_dashboard_index') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t {% endif %}
\t\t\t\t  <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>{{ app.user.fullName }}</span>
            <p><a href=\"{{ logout_path('main') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Logout</span> </a> </p>
\t\t\t{% else %}
\t\t\t<p><a href=\"{{ path('login') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"{{ path('registration') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            {% endif %}
        </div>
      

    </nav>

    <!-- Navbar End -->

 {% block body %}
 
    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Instructors</h6>
                <h1 class=\"mb-5\">Welcome</h1>
            </div>
            <div class=\"row g-4\">
                
               
<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/team-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Team End -->
 {% endblock  %}
   
    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Contact</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                
                       
               
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

   {% block javascript %}
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('lib/wow/wow.min.js')}}\"></script>
    <script src=\"{{asset('lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>
   
    <!-- Template Javascript -->
        <script src=\"{{asset('js/main.js')}}\"></script>
    {% endblock %}
</body>

</html>", "home/index.html.twig", "C:\\Users\\Malik\\Desktop\\User-Crud-Symfony5-master\\templates\\home\\index.html.twig");
    }
}
