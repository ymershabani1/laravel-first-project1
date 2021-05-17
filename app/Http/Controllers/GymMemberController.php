<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;


class GymMemberController extends Controller
{
    public function createNewMember(Request $request)
    {
        $profilePicture = $request->file('profile_picture');
        $path = null;
        if($profilePicture != null){
            $path = $profilePicture->store('public/images');
            $path = str_replace("public/", 'storage/', $path);
        }

        $gymmember = new Member();
        $gymmember->first_name = $request->first_name;
        $gymmember->last_name = $request->last_name;
        $gymmember->email = $request->email;
        $gymmember->birthdate = $request->birthdate;
        $gymmember->expiredate = $request->expiredate;
        $gymmember->profile_picture = $path;
        $gymmember->save();

        return redirect()->route('show.members');

    }

    public function showMembers(){
        $gmembers = Member::all();
        return view('show-members',[
            'gmembers' => $gmembers
        ]);
    }

    public function deleteMember($id){
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('show.members');
    }

    public function editingMember($id){
        $gmember = Member::find($id);


        return view('edit-member',[
            'gmember' => $gmember
        ]);
    }

    public function editMember(Request $request, $id){
        $profilePicture = $request->file('profile_picture');
        $path = null;
        if($profilePicture != null){
            $path = $profilePicture->store('public/images');
            $path = str_replace("public/", 'storage/', $path);
        }

        $gymmember = Member::find($id);
        $gymmember->first_name = $request->first_name;
        $gymmember->last_name = $request->last_name;
        $gymmember->email = $request->email;
        $gymmember->birthdate = $request->birthdate;
        $gymmember->expiredate = $request->expiredate;
        $gymmember->profile_picture = $path;
        $gymmember->save();

        return redirect()->route('show.members');
    }


}
