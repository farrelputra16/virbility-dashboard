namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostFilter extends Component
{
    public $search = '';

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')->get();

        return view('livewire.post-filter', compact('posts'));
    }
}
