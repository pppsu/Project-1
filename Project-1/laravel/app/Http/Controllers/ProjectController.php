<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProjectController extends Controller {
	/*public function __construct() {
		$this->middleware('auth');
	}*/

	public function home() {
		return view('Project.home');
	}
	public function Stuindex() {
		return view('Project.index');
	}
	public function Stucreate() {
		return view('Project.create');
	}
	public function Stuform() {
		return view('Project.formAc');
	}

	public function Stuform2() {
		return view('Project.formAc2');
	}

	public function StuformEN() {
		return view('Project.formEN');
	}

	public function Stucstus() {
		return view('Project.index');
	}

	public function Adhome() {
		return view('Project.Admin.home');
	}
	public function AddAm() {
		return view('Project.Admin.addAdmin');
	}
	public function DeleteAm() {
		return view('Project.Admin.deleteAdmin');
	}
	public function home2() {
		return view('Project.Admin.home2');
	}
	public function edit() {
		return view('Project.edit');
	}
	public function login() {
		return view('Project.login');
	}

	public function AddMember2() {
		return view('Project.Staff.AddMember2');
	}
	public function AddMember() {
		return view('Project.Staff.AddMember');
	}

	public function permission() {
		return view('Project.Staff.permission');
	}

	public function Addorganizations() {
		return view('Project.Staff.Addorganizations');
	}
	public function add() {
		return view('Project.Staff.add');
	}
	public function index() {
		return view('Project.Staff.index');
	}
	public function stfedit() {
		return view('Project.Staff.edit');
	}
	public function detail() {
		return view('Project.Staff.detail');
	}

	public function home3() {
		return view('Project.Staff.home');
	}

	public function Managemember() {
		return view('Project.Staff.Managemember');
	}
}
?>