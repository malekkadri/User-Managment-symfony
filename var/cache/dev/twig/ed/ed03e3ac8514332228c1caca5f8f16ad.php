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

/* admin/user/index.html.twig */
class __TwigTemplate_cc005aa6a04683cad11777ae43de5f7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'title_h1' => [$this, 'block_title_h1'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        echo "Gestion des utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"card shadow my-4\">
        <div class=\"card-header py-2 d-flex align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Utilisateurs</h6>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_add");
        echo "\" class=\"btn btn-success btn-icon-split ml-auto\">
                <span class=\"icon text-white-50\">
                    <i class=\"fas fa-plus\"></i>
                </span>
                <span class=\"text\">Ajouter un utilisateur</span>
            </a>
        </div>
          <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Recherche...\" class=\"form-control\"
                id=\"search-input\">
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"table\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th onclick=\"sortTable(1)\">Nom</th>
                            <th>Email</th>
                            <th>Nom d'utilisateur</th>
                            <th>Type</th>
                            <th>Créer le</th>
                            <th>QR</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    ";
        // line 56
        echo "                    <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 58
            echo "                        <tr>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 64), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                            <td>
                            <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "qrCode", [], "any", false, false, false, 66), "html", null, true);
            echo "\" width=\"123\" height=\"100\" />
                            </td>
                            <td>
                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded with-icon\">
                                    <i class=\"far fa-eye\"></i>
                                </a>
                                ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 72) == "Utilisateur")) {
                // line 73
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" class=\"btn btn-primary rounded with-icon\">
                                        <i class=\"far fa-edit\"></i>
                                    </a>
                                    <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\" class=\"btn btn-danger rounded with-icon\">
                                        <i class=\"far fa-trash-alt\"></i>
                                    </a>
                                ";
            }
            // line 80
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
            <script>
        function createPDF() {
            // Clone the table to not alter the original
            var table = document.getElementById('table').cloneNode(true);
            
            // Remove the last th in the header
            var headerRow = table.rows[0];
            headerRow.deleteCell(-1); // Removes the last cell in the header row

            // Remove the last td in each body row
            var rows = table.rows;
            for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the header
                rows[i].deleteCell(-1); // Deletes the last cell of each row
            }

            var style = \"<style>\";
            style += \"table {width: 100%; border-collapse: collapse; margin-top: 20px;}\";
            style += \"th, td {border: 1px solid #ddd; padding: 8px; text-align: left;}\";
            style += \"th {background-color: #f2f2f2;}\";
            style += \"</style>\";

            // Create a window object.
            var win = window.open('', '', 'height=700,width=700');
            win.document.write('<html><head>');
            win.document.write('<title>Abonnements list PDF</title>');   // <title> for PDF header.
            win.document.write(style);          // Add style inside the head tag.
            win.document.write('</head>');
            win.document.write('<body>');
            win.document.write(table.outerHTML);         // The modified table contents inside the body tag.
            win.document.close();    // Close the current window.
            win.print();    // Print the contents.
        }
        </script>

    <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById(\"myInput\");
          filter = input.value.toUpperCase();
          table = document.getElementById(\"table\");
          tr = table.getElementsByTagName(\"tr\");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = \"\";
              } else {
                tr[i].style.display = \"none\";
              }
            }
          }
        }

        function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById(\"table\");
          switching = true;
          dir = \"asc\";

          while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
              shouldSwitch = false;
              x = rows[i].getElementsByTagName(\"TD\")[n];
              y = rows[i + 1].getElementsByTagName(\"TD\")[n];

              if (dir == \"asc\") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              } else if (dir == \"desc\") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              }
            }

            if (shouldSwitch) {
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              switchcount++;
            } else {
              if (switchcount == 0 && dir == \"asc\") {
                dir = \"desc\";
                switching = true;
              }
            }
          }
        }
    </script>
  <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dataTable/user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 193,  273 => 93,  268 => 92,  258 => 91,  242 => 83,  234 => 80,  227 => 76,  220 => 73,  218 => 72,  212 => 69,  206 => 66,  201 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 60,  181 => 59,  178 => 58,  174 => 57,  171 => 56,  139 => 16,  133 => 12,  123 => 11,  110 => 8,  100 => 7,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Utilisateurs\" %}

{% block title_h1 \"Gestion des utilisateurs\" %}

{% block stylesheets %}
  <link href=\"{{ asset(\"sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css\") }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

    <div class=\"card shadow my-4\">
        <div class=\"card-header py-2 d-flex align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Utilisateurs</h6>
            <a href=\"{{ path(\"admin_user_add\") }}\" class=\"btn btn-success btn-icon-split ml-auto\">
                <span class=\"icon text-white-50\">
                    <i class=\"fas fa-plus\"></i>
                </span>
                <span class=\"text\">Ajouter un utilisateur</span>
            </a>
        </div>
          <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Recherche...\" class=\"form-control\"
                id=\"search-input\">
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"table\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th onclick=\"sortTable(1)\">Nom</th>
                            <th>Email</th>
                            <th>Nom d'utilisateur</th>
                            <th>Type</th>
                            <th>Créer le</th>
                            <th>QR</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    {# <tfoot>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Nom d'utilisateur</th>
                            <th>Type</th>
                            <th>Créer le</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot> #}
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td>{{ user.firstName }}</td>
                            <td>{{ user.lastName }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.username }}</td>
                            <td>{{ user.roleTitle }}</td>
                            <td>{{ user.createdAt | date(\"d-m-Y H:i\") }}</td>
                            <td>
                            <img src=\"{{ user.qrCode }}\" width=\"123\" height=\"100\" />
                            </td>
                            <td>
                                <a href=\"{{ path(\"admin_user_show\", {\"id\": user.id}) }}\" class=\"btn btn-info rounded with-icon\">
                                    <i class=\"far fa-eye\"></i>
                                </a>
                                {% if user.roleTitle == \"Utilisateur\" %}
                                    <a href=\"{{ path(\"admin_user_edit\", {\"id\": user.id}) }}\" class=\"btn btn-primary rounded with-icon\">
                                        <i class=\"far fa-edit\"></i>
                                    </a>
                                    <a href=\"{{ path(\"admin_user_delete\", {\"id\": user.id}) }}\" class=\"btn btn-danger rounded with-icon\">
                                        <i class=\"far fa-trash-alt\"></i>
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset(\"sbadmin2/vendor/datatables/jquery.dataTables.min.js\") }}\"></script>
  <script src=\"{{ asset(\"sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js\") }}\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
            <script>
        function createPDF() {
            // Clone the table to not alter the original
            var table = document.getElementById('table').cloneNode(true);
            
            // Remove the last th in the header
            var headerRow = table.rows[0];
            headerRow.deleteCell(-1); // Removes the last cell in the header row

            // Remove the last td in each body row
            var rows = table.rows;
            for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the header
                rows[i].deleteCell(-1); // Deletes the last cell of each row
            }

            var style = \"<style>\";
            style += \"table {width: 100%; border-collapse: collapse; margin-top: 20px;}\";
            style += \"th, td {border: 1px solid #ddd; padding: 8px; text-align: left;}\";
            style += \"th {background-color: #f2f2f2;}\";
            style += \"</style>\";

            // Create a window object.
            var win = window.open('', '', 'height=700,width=700');
            win.document.write('<html><head>');
            win.document.write('<title>Abonnements list PDF</title>');   // <title> for PDF header.
            win.document.write(style);          // Add style inside the head tag.
            win.document.write('</head>');
            win.document.write('<body>');
            win.document.write(table.outerHTML);         // The modified table contents inside the body tag.
            win.document.close();    // Close the current window.
            win.print();    // Print the contents.
        }
        </script>

    <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById(\"myInput\");
          filter = input.value.toUpperCase();
          table = document.getElementById(\"table\");
          tr = table.getElementsByTagName(\"tr\");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = \"\";
              } else {
                tr[i].style.display = \"none\";
              }
            }
          }
        }

        function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById(\"table\");
          switching = true;
          dir = \"asc\";

          while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
              shouldSwitch = false;
              x = rows[i].getElementsByTagName(\"TD\")[n];
              y = rows[i + 1].getElementsByTagName(\"TD\")[n];

              if (dir == \"asc\") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              } else if (dir == \"desc\") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              }
            }

            if (shouldSwitch) {
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              switchcount++;
            } else {
              if (switchcount == 0 && dir == \"asc\") {
                dir = \"desc\";
                switching = true;
              }
            }
          }
        }
    </script>
  <script src=\"{{ asset(\"js/dataTable/user.js\") }}\"></script>
{% endblock %}", "admin/user/index.html.twig", "C:\\Users\\Malik\\Desktop\\User-Crud-Symfony5-master\\templates\\admin\\user\\index.html.twig");
    }
}
