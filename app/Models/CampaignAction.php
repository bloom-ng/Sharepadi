<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampaignAction extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'action'
    ];

    public const ACTIONS = [
        'LIKE_POST_VIDEO' => 'Like a post/video',
        'FOLLOW_PAGE_PROFILE' => 'Follow a page/profile',
        'COMMENT_POST_VIDEO' => 'Comment on a post/video',
        'SHARE_POST' => 'Share a post',
        'SIGN_UP_WEBSITE' => 'Sign up on a website',
        'CLICK_BUTTON' => 'Click on a button',
        'VISIT_WEBSITE' => 'Visit a website',
        'VOTE_PERSON' => 'Vote for a person',
        'MAKE_POST' => 'Make a post',
        'JOIN_GROUP_CHANNEL' => 'Join a group/channel',
        'TAG_FRIEND' => 'Tag a friend',
        'SEARCH_FOR_SOMETHING' => 'Search for something',
        'COMPLETE_SURVEY' => 'Complete a survey',
        'FILL_FORM' => 'Fill a form',
        'SEND_MESSAGE' => 'Send a message',
        'SEARCH_FOR_SOMETHING_AGAIN' => 'Search for something',
        'GIVE_HONEST_REVIEW' => 'Give an honest review',
        'INSTALL_OPEN' => 'Install and open',
        'STREAM_LISTEN_MUSIC' => 'Stream/listen to your music',
        'WATCH_VIDEO_1_MIN' => 'Watch a video for 1 min',
        'WATCH_VIDEO_5_MINS' => 'Watch a video for 5 mins',
        'START_TELEGRAM_BOT' => 'Start a Telegram Bot',
        'POST_VIDEO_VIBING_SONG' => 'Post a video vibing to your song',
    ];

    public function campaing(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
